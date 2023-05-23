FROM node:16-alpine3.16 As development

WORKDIR /usr/src/app

RUN npm i -g npm

COPY package.json ./
COPY package-lock.json ./

RUN npm install --force

COPY . .

EXPOSE $EXPOSE_APP_PORT