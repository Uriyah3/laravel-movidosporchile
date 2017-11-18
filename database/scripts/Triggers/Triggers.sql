--insertar al voluntario al rnv despues de aparecer en tabla voluntario
CREATE OR REPLACE FUNCTION rnv_insert()
  RETURNS trigger AS
$$
BEGIN
         INSERT INTO rnvs(rut, disponible) 
         VALUES(new.rut, TRUE);
 
    RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE TRIGGER voluntario_AI 
	AFTER INSERT ON voluntarios
	FOR EACH ROW
	EXECUTE PROCEDURE rnv_insert();