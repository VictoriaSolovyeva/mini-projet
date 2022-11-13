https://etudiants-caweb.u-strasbg.fr/2122/VikaStras/mini-braun/
git add . && git commit -m "message" && git push


name: Build and deploy

on:
  push:
    branches: [ "master" ]
  pull_request:
    branches: [ "master" ]
  workflow_dispatch:
jobs:
  # lint:
  #   name: Lint 👓
  #   runs-on: ubuntu-latest
  #   steps:
  #     - name: Checkout code
  #       uses: actions/checkout@v3
  #       with:
  #         # Full git history is needed to get a proper list of changed files within `super-linter`
  #         fetch-depth: 0
  #     - name: Super Linter
  #       uses: github/super-linter@v4
  #       env:
  #         VALIDATE_ALL_CODEBASE: false
  #         DEFAULT_BRANCH: "master"
  #         GITHUB_TOKEN: ${{ secrets.token }}
  build:
    name: Build ⛏
    runs-on: ubuntu-latest
    steps:
      - name: Checkout repository
        uses: actions/checkout@master
      - name: Install dependencies
        run: npm ci
      - name: Build dependencies
        run: npm run build-prod
      - name: Archive production artifact
        uses: actions/upload-artifact@master
        with:
          name: dist
          path: dist
  deploy:
    name: Deploy 🚀
    needs: build
    runs-on: ubuntu-latest
    steps: 
      - name: Checkout repository
        uses: actions/checkout@master
      - name: Download artifact
        uses: actions/download-artifact@master
        with: 
          name: dist
          path: dist
      - name: Sync files to hosting
        uses: SamKirkland/FTP-Deploy-Action@4.0.0
        with: 
          server: ${{ secrets.ftp_server }}
          username: ${{ secrets.ftp_username }}
          password: ${{ secrets.ftp_password }}
          protocol: ftp
          local-dir: ./
          server-dir: ./2122/VikaStras/mini-braun/