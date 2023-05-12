```dockerfile
RUN apt-get update \
  && apt-get -y install --no-install-recommends \
    nodejs npm \
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
```

これだと最新バージョンがインストールされず、なぜか12がインストールされるので、下記のようにバージョンを指定することで最新バージョンをインストールすることができる

```dockerfile
RUN npm install n -g 
RUN n 20
```