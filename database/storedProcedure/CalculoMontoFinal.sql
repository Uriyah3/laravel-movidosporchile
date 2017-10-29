CREATE PROCEDURE sumarMontosDepositados() 
  BEGIN
    SELECT SUM(monto) from Deposito; 
  END;