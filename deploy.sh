#!/bin/bash
REMOTE_USER="root"
REMOTE_HOST="82.202.128.173"
REMOTE_PATH="/home/bitrix/www/"
LOCAL_PATH="$HOME/projects/fish/"

EXCLUDES=(
  '--exclude=.git/'
  '--exclude=upload/'
  '--exclude=node_modules/'
  '--exclude=*.log'
)

rsync -avz -e ssh --no-owner --no-group --delete "${EXCLUDES[@]}" $LOCAL_PATH $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH
