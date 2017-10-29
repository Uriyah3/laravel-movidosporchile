


--insertar al voluntario al rnv despues de aparecer en tabla voluntario
CREATE TRIGGER voluntario_AI AFTER INSERT ON voluntario
FOR EACH ROW
INSERT INTO rnv(rut, disponible) VALUES(new.rut, TRUE)




--insertar el deposito despues de insertar la donacion
CREATE TRIGGER deposito_AI AFTER INSERT ON donacion
FOR EACH ROW
INSERT INTO deposito(nombre, rut, monto) VALUES(new.nombre, new.rut, new.monto)