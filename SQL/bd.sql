use f1news;

create Table Usuarios (
    CodUsu int AUTO_INCREMENT,
    Usuario VARCHAR(20),
    Contraseña VARCHAR(20),
    Nombre varchar(20),
    Apellido varchar(50),
    Email varchar(80),
    Fecha_nac DATE,
    Direccion varchar(20),
    Cp INT,
    Pais varchar(20),
    Fecha_alta DATE,
    PRIMARY KEY (CodUsu)
);


INSERT INTO Usuarios (Usuario, Contraseña, Nombre,Apellido,Email,Fecha_nac,Direccion,Cp,Pais,Fecha_alta)
VALUES ('CHUN', '1234', 'Cristian','mendez','c@c.com','1992-08-19','juntas 50', '28296', 'españa', '2022-04-14 14:22:10');