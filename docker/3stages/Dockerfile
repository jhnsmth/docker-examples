# Build Stage 1
FROM node:14.18 AS base
WORKDIR /myapp
ENV NODE_ENV=production

COPY package.json yarn.lock /myapp/

RUN  yarn install --frozen-lockfile --production --skip-integrity-check \
  && rm -rf /myapp/node_modules/@types \
  && rm -rf /myapp/node_modules/browserif* \
  && rm -rf /myapp/node_modules/figlet/fonts/* \
  && find /myapp/node_modules -name '*.d.ts' -delete \
  && find /myapp/node_modules -name '*.ts.map' -delete \
  && find /myapp/node_modules -name '*.js.map' -delete \
  && find /myapp/node_modules -name '*.md' -delete \
  && yarn cache clean --all

# Build Stage 2
# Compile TS to JS
FROM node:14.18 AS build
WORKDIR /myapp

COPY package.json yarn.lock /myapp/
RUN yarn install --frozen-lockfile --development

COPY . /myapp

RUN yarn codegen \
 && yarn compile:prod

# Build Stage 3
FROM node:14.18

WORKDIR /myapp
ENV NODE_ENV=production

COPY --from=base /myapp/node_modules/ /myapp/node_modules/
COPY --from=build /myapp/build/ /myapp/src/

COPY . /myapp

CMD npm run start:prod
