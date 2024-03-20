FROM nginx:alpine

COPY . /usr/share/nginx/html

COPY nginx-config.sh /docker-entrypoint.d/nginx-config.sh
RUN chmod +x /docker-entrypoint.d/nginx-config.sh

EXPOSE 80