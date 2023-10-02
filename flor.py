import turtle

def dibujar_flor():
    ventana = turtle.Screen()
    ventana.bgcolor("black")

    flores = turtle.Turtle()
    flores.shape("turtle")
    flores.color("yellow")
    flores.speed(10)

    for _ in range(36):
        flores.forward(100)
        flores.right(45)
        flores.forward(100)
        flores.right(135)
        flores.forward(100)
        flores.right(45)
        flores.forward(100)
        flores.right(135)
        flores.right(10)

    ventana.exitonclick()

dibujar_flor()