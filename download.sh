#!/bin/bash
REMOTE_USER="root"
REMOTE_HOST="82.202.128.173"
REMOTE_PATH="/home/bitrix/www/"
LOCAL_PATH="./"

EXCLUDES=(
  '--exclude=upload/'
)

# С сервера на хост
rsync -avz -e ssh $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH $LOCAL_PATH