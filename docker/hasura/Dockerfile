FROM hasura/graphql-engine:v2.8.1

ENV HASURA_GRAPHQL_ENABLE_TELEMETRY=false \
    HASURA_GRAPHQL_EVENTS_HTTP_POOL_SIZE=10 \
    HASURA_GRAPHQL_EVENTS_FETCH_INTERVAL=500

# Так как Hasura использует ubuntu как базовый имедж 
# то мы можем установить `curl` используя стандартную команду,
# которая будет выполнена внутри имеджа во время сборки и
# внесенные ей изменения станут часть имеджа
RUN apt-get update && apt-get install -y curl
