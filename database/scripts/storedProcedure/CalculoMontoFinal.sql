CREATE OR REPLACE FUNCTION sumarMontosDepositados() 
RETURNS bigint AS 
$$
  BEGIN
    RETURN (SELECT SUM(monto) from depositos);
  END;
  $$
LANGUAGE 'plpgsql';