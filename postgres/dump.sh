#!/bin/bash

# Error on referencing undefined variables (short version is `set -u`)
set -o nounset

# Exit script on the first failing command (short version is `set -e`)
set -o errexit

echo "Please specify user name"
read PGUSER # Special variable that is read by pg_dump

# See https://www.postgresql.org/docs/current/app-pgdump.html
pg_dump -W -F plain $1
