Xây dựng dự án sử dụng API
	- Backend: (PHP) -> logic nghiệp vụ
	- Client:
		- Mobile, PC Application
		- Frontend -> HTML/CSS/JS

========================================
Mini Project:

- Backend:
	API
		Authen:
			- login
			- register
			- userList
			- update/delete/add => Tự viết thêm => Bài tập
		Product:
			- productList
			- add/update/delete => Tự viết thêm => Bài tập
- Client: Web Client -> Goi API
	login page
	register page
	userList page
	productList page

Triển khai:

B1. Xậy dựng database.
- Tao Tables: users, products
- Fake du lieu

B2. Phân tịch API

BASE_URL: http://localhost/aptech/T2008A/lesson07/server/

Authen:
	API: login
		- URL: api/authen.php
		- Method: POST
		- Request: {
			"action": "login",
			"email": "tranvandiep.it@gmail.com",
			"password": "123456"
		}
		- Response: {
			"status": 1 (1: success, 2 failed),
			"msg": "Error ???"
		}
	API: login
		- URL: api/authen.php
		- Method: POST
		- Request: {
			"action": "logout"
		}
		- Response: {
			"status": 1 (1: success, 2 failed),
			"msg": "Error ???"
		}
	API: register
		- URL: api/authen.php
		- Method: POST
		- Request: {
			"action": "register",
			"fullname": "TRAN VAN DIEP",
			"username": "dieptv",
			"email": "tranvandiep.it@gmail.com",
			"password": "123456",
			"address": "Ha Noi"
		}
		- Response: {
			"status": 1 (1: success, 2 failed),
			"msg": "Error ???"
		}
	API: userList
		- URL: api/authen.php
		- Method: POST
		- Request: {
			"action": "list"
		}
		- Response: {
			"status": 1 (1: success, 2 failed),
			"msg": "Error ???",
			"userList": [
				{
					"id": "1",
					"fullname": "TRAN VAN DIEP",
					"username": "dieptv",
					"email": "tranvandiep.it@gmail.com",
					"address": "Ha Noi"
				}, {
					"id": "2",
					"fullname": "TRAN VAN DIEP",
					"username": "dieptv",
					"email": "tranvandiep.it@gmail.com",
					"address": "Ha Noi"
				}
			]
		}
Product:
	API: productList
		- URL: api/product.php
		- Method: POST
		- Request: {
			"action": "list"
		}
		- Response: {
			"status": 1 (1: success, 2 failed),
			"msg": "Error ???",
			"productList": [
				{
					"id": "1",
					"title": "Bai viet",
					"thumbnail": "URL",
					"updated_at": "2021-06-12 12:02"
				}, {
					"id": "2",
					"title": "Bai viet",
					"thumbnail": "URL",
					"updated_at": "2021-06-12 12:02"
				}
			]
		}

B3. Code Server Backend
- Xay dung 1 khung chuong trinh
- db
	- config.php
	- dbhelper.php
- utils
	- utility.php
- api
	- authen.php
	- product.php