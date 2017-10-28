
CREATE TRIGGER voluntario_AI AFTER INSERT ON voluntario
FOR EACH ROW
INSERT INTO rnv(rut, disponible) VALUES(new.rut, TRUE)
