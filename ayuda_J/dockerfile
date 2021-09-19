FROM debian
RUN apt-get update -y
RUN apt-get install nodejs npm -y
COPY web/ /app/
WORKDIR /app
RUN npm install 
EXPOSE 3000
CMD node app.js
