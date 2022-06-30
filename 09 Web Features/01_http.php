<?php

/**
 * General___________________
 * 
 * Request Url
 * Request Method
 * Status Code
 * Remote Address (ip of a remote computer)
 * Refferrer Policy (information about going one page to another)
 * 
 * Response___________________
 * 
 * Server (Mostly hidden so that dont know what kind of server using)
 * set cookie (set small piece of data called cookies send server to client)
 * content-type (text/html, text/css, image/png, application/json)
 * content-length
 * date
 * 
 * Request____________________
 * 
 * Cookies
 * accept-xxx (accept-coding, accept-charset)
 * content-type
 * content-length
 * Authorization (token)
 * User-agent (operationg system, browser)
 * Referrer (referrer site)
 * 
 * http status code_________________________________
 * 
 * 1xx : Informational
 * Request recieved / processing
 * 
 * 2xx : success
 * Successfully Recieved, understood, accepted
 * 
 * 3xx : Redirect
 * Further actioin must be taken / redirect
 * 
 * 4xx : Client Error
 * Request Doest not have what it needs
 * 
 * 5xx : Server Error 
 * Server Failed to fulfil an apparent valid request
 * 
 * such as, 
 * 200 - ok
 * 201 - ok created
 * 301 - moved to new url
 * 304 - not modifed (cached version)
 * 400 - bad request
 * 401 - Unauthorized
 * 404 - not Found
 * 500 - Internal server error
 * 
 */
