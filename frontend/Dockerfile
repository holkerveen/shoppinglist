# Minimal development image for vue
# Mount your project dir at /app
FROM node:lts-alpine

WORKDIR /app

RUN yarn global add @vue/cli

EXPOSE 8080
CMD ["yarn", "serve"]
