FROM mysql:8.0.33-debian
#ENV MYSQL_ROOT_PASSWORD: password
RUN apt-get update && apt-get install -y wget unzip
# MySQLの公式サイトからサンプルデータをダウンロード
RUN wget https://downloads.mysql.com/docs/world-db.zip && unzip world-db.zip && cp world-db/* /docker-entrypoint-initdb.d/
