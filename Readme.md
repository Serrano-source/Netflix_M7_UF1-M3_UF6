> .[!NOTE].
> Aqui tienes una nota especial



**Descripcion del proyecto:**

El proyecto tracta de hacer un netflix pero en vez de ser el tipico netflix que todos conocemos sera un netflix tipo administrador.
Nosotros podremos añadir las series, las peliculas y pondremos de que trata, la duracion ETC..
Tambien podremos editar los usuarios que estan registrados previamente.
Podremos iniciar sesion como usuario normal y podremos ver las series y peliculas añadidas.
Como administrador podremos editar las series, las peliculas y usuarios. 

![UML](UML/UML_Netflix.png)


**Codigo creacion de taules**

CREATE TABLE users (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(30) NOT NULL,
   email VARCHAR(50) NOT NULL,
   password VARCHAR(255) NOT NULL
)

 
CREATE TABLE series (
    id INT(11) NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    nombre_serie VARCHAR(255) NOT NULL,
    capitulos TEXT NOT NULL,
    temporadas INT(11) NOT NULL,
    PRIMARY KEY (id)
);


-- Crear la tabla peliculas
CREATE TABLE peliculas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255),
  reparto VARCHAR(255),
  duracion INT
);

CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  es_admin BOOLEAN NOT NULL DEFAULT 0
);


Inserts de series

INSERT INTO series (titulo, nombre_serie, capitulos, temporadas)
VALUES ('Game of Thrones', 'Juego de Tronos', 
        'Invierno llega (60 min); La Caminata de la Pena (62 min); Se acerca el Invierno (58 min)', 8);
INSERT INTO series (titulo, nombre_serie, capitulos, temporadas)
VALUES ('Stranger Things', 'Stranger Things',
        'Chapter One: The Vanishing of Will Byers (48 min); Chapter Two: The Weirdo on Maple Street (56 min); Chapter Three: Holly, Jolly (51 min)', 4);

-- Agregar algunos registros usando INSERT INTO
INSERT INTO peliculas (nombre, reparto, duracion) VALUES 
('El señor de los anillos: El retorno del rey', 'Elijah Wood, Viggo Mortensen, Ian McKellen', 201),
('Titanic', 'Leonardo DiCaprio, Kate Winslet, Billy Zane', 194),
('La La Land', 'Ryan Gosling, Emma Stone, John Legend', 128),
('El club de la pelea', 'Brad Pitt, Edward Norton, Helena Bonham Carter', 139),
('Volver al futuro', 'Michael J. Fox, Christopher Lloyd, Lea Thompson', 116),
('Jurassic Park', 'Sam Neill, Laura Dern, Jeff Goldblum', 127),
('Avatar', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', 162),
('El Padrino', 'Marlon Brando, Al Pacino, James Caan', 175),
('Indiana Jones y los cazadores del arca perdida', 'Harrison Ford, Karen Allen, Paul Freeman', 115),
('La naranja mecánica', 'Malcolm McDowell, Patrick Magee, Michael Bates', 136),
('El rey león', 'Matthew Broderick, James Earl Jones, Jeremy Irons', 88),
('La forma del agua', 'Sally Hawkins, Octavia Spencer, Michael Shannon', 123),
('Forrest Gump', 'Tom Hanks, Robin Wright, Gary Sinise', 142),
('El gran Lebowski', 'Jeff Bridges, John Goodman, Julianne Moore', 117),
('Kill Bill: Volumen 1', 'Uma Thurman, Lucy Liu, Vivica A. Fox', 111),
('El silencio de los inocentes', 'Jodie Foster, Anthony Hopkins, Scott Glenn', 118),
('Pulp Fiction', 'John Travolta, Uma Thurman, Samuel L. Jackson', 154),
('Los Goonies', 'Sean Astin, Josh Brolin, Jeff Cohen', 114),
('Matrix', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 136),
('E.T. El extraterrestre', 'Henry Thomas, Drew Barrymore, Peter Coyote', 115),
('El resplandor', 'Jack Nicholson, Shelley Duvall, Danny Lloyd', 144),
('El club de los poetas muertos', 'Robin Williams, Robert Sean Leonard, Ethan Hawke', 128),
('El caballero de la noche', 'Christian Bale, Heath Ledger, Aaron Eckhart', 152),
('Regreso al futuro II', 'Michael J. Fox, Christopher Lloyd, Lea Thompson', 108),
('Los Vengadores', 'Robert Downey Jr., Chris Evans, Scarlett Johansson', 143),
('Spider-Man: Un nuevo universo', 'Shameik Moore, Jake Johnson, Hailee Steinfeld', 117),
('Star Wars: Episodio IV - Una nueva esperanza', 'Mark Hamill, Harrison Ford, Carrie Fisher', 121),
('La sociedad de los poetas muertos', 'Robin Williams, Robert Sean Leonard, Ethan Hawke', 129);


INSERT INTO usuarios (nombre, email, password, es_admin) VALUES
('Juan', 'juan@mail.com', '123456', 1),
('María', 'maria@mail.com', 'qwerty', 0),
('Pedro', 'pedro@mail.com', 'abcdef', 0),
('Sofía', 'sofia@mail.com', 'ghijkl', 1),
('Luis', 'luis@mail.com', 'mnopqr', 0),
('Ana', 'ana@mail.com', 'stuvwx', 0),
('Miguel', 'miguel@mail.com', 'yzabcd', 1),
('Lucía', 'lucia@mail.com', 'efghij', 0),
('Carlos', 'carlos@mail.com', 'klmnop', 0),
('Marta', 'marta@mail.com', 'qrstuv', 1);
