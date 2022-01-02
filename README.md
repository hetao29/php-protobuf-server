# php-protobuf-server
The php protobuf server framework or route.

# Architecture

gRPC Client  => nginx [gRPC Gateway](https://www.nginx.com/blog/deploying-nginx-plus-as-an-api-gateway-part-3-publishing-grpc-services/) => php-fpm => this framework

# Process

1. proto and genproto to php files

```bash
cd proto && make
```

2. write gRPC Server in services dir like helloworld

```php
<?php
namespace Test\Helloworld;
class Greeter{
	/**
	 * @return HelloReply
	 */
	public function SayHello($data){
		$request = \Grpc\Parser::deserializeMessage([HelloRequest::class, null], $data);
		$reply = new HelloReply();
		$reply->setMessage("Hello, ".$request->getName()."!");
		return $reply;
	}
}

```

3. config nginx && php-fpm

```conf
server {
	listen 50000 http2;
	root /data/server/;
	location / {
		if (!-e $request_filename){
			rewrite ^/(.+?)$ /index.php last;
		}
	}
	location ~ \.php$ {
		fastcgi_param REMOTE_ADDR $http_x_real_ip;
		fastcgi_pass   127.0.0.1:9000;
		fastcgi_index  index.php;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		include        fastcgi_params;
	}
}
```
4. test

```bash
php client/hello.php
```
