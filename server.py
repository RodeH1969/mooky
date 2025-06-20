import http.server
import ssl
import os

port = 8443
directory = os.getcwd()
server_address = ('', port)
handler = http.server.SimpleHTTPRequestHandler
httpd = http.server.HTTPServer(server_address, handler)
context = ssl.SSLContext(ssl.PROTOCOL_TLS_SERVER)
context.load_cert_chain(certfile='cert.pem', keyfile='key.pem')
httpd.socket = context.wrap_socket(httpd.socket, server_side=True)
print(f"Serving at https://0.0.0.0:{port}")
httpd.serve_forever()