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
 * http connect method_______________________
 * 
 * The CONNECT method is used by the client to establish a network connection to a web server over HTTP. it creates an end-to-end tunnel between two machines through a proxy/firewall machine.
 * 
 * http trace method_________________________
 * 
 * echo the contents of an HTTPs Request back to the client which can be used for debugging purpose at the time of development.
 * Simply request that the server recieved echo back the request.
 * 
 * http options method_______________________
 * 
 * the options method is used by the client to find out what are the http methods and other options supported by a web server. (*) means whole server
 * 
 * http head method__________________________
 * 
 * head method is same as get. but only transfer the status line and header section. it is used to ask only for information about a document, not for the document itself. Head is faster than get, as a much smaller amount of data is transferred. its often used by clients who use caching, to see if the document has changed since it was last accessed. if it was not , then the local copy can be reused, otherwise the updated version must be retrieved with a get.
 * 
 * this method is often used for testing hypertext links for validity , accessibility and recent modification.
 */
