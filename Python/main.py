from car import Car
from account import Account

if __name__ == "__main__":
    """print("Hola Mundo")
    car = Car()
    car.license = "MS234"
    car.driver = "Andres herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "QWE567"
    car2.driver = "Matha"
    print(vars(car2))"""
    car = Car("ASDW234", Account("Andres herrera", "HTYHFD84"))
    print(vars(car))
    print(vars(car.driver))
