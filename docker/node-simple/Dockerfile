FROM node:13.14-alpine3.11

# Аргумент для сборки
# если он не будет предеан при сборке, то будет 
# использовано дефолтное значение `production`
ARG NODE_ENV=production

# Пример использования агрумента
# здесь он используется для задания 
# переменной окружения
ENV NODE_ENV=$NODE_ENV

WORKDIR /telegram

COPY . /telegram

# Команда которая будет выполнена внутри имеджа во время сборки
# внесенные ей изменения станут часть имеджа
RUN yarn install --frozen-lockfile --no-cache --production && yarn cache clean --all

CMD [ "npm", "run", "start" ]
