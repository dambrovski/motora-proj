#!/usr/bin/env python
import pika
import smtplib



connection = pika.BlockingConnection(pika.ConnectionParameters('localhost'))
channel = connection.channel()
channel.queue_declare(queue='positivo')

def callback(ch, method, properties, body):
    print("Enviando e-mail com Registro.. %r" %body)
    server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    server.login("cotacaoprojetomaster@gmail.com", "91WmOCOw")
    server.sendmail(
      "motora-rodo@gmail.com",
      " cotacaoprojetomaster@gmail.com",
      body)
    server.quit()

channel.basic_consume(queue='positivo',
                    auto_ack=True,
                         on_message_callback=callback)
print(' [*] Esperando as mensagens. EXIT: CTRL+C')

channel.start_consuming()
