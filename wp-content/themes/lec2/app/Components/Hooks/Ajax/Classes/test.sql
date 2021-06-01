CREATE FUNCTION lec2_floatval (symbols VARCHAR(20), cost VARCHAR(510))         
RETURNS  FLOAT

DELIMITER $$
BEGIN      
	SET cost = REPLACE(cost,',','.');
  SET @total_symbols = LENGTH(symbols)  - LENGTH( REPLACE ( symbols, ",", "") );
	@i = 0;
  @p = 1;
  REPEAT
  SET @i = @i + 1;
  SET @symbols = SUBSTRING(symbols,@p,1);
  SET @p = @p + 2;
  SET cost = REPLACE(cost, @symbols,'');
  END REPEAT;
  UNTIL @i > @total_symbols
    SET cost = CAST(cost AS DECIMAL(65,2));
    RETURN cost;
    END$$
DELIMITER ;





    --RETURN cost; 
  -- SELECT ROUND (( LENGTH("$,E,Y")  - LENGTH( REPLACE ( "$,E,Y", ",", "") ) ) / LENGTH(",")) AS count
--CREATE PROCEDURE LoopDemo()


CREATE FUNCTION `lec2_floatval`(symbols VARCHAR(20), cost VARCHAR(510)) 
RETURNS VARCHAR(510)
BEGIN      
  SET cost = REPLACE(cost,',','.');
  SET @total_symbols = LENGTH(symbols)  - LENGTH( REPLACE ( symbols, ",", "") );
  SET @i = 0;
  SET @p = 1;
  REPEAT
  SET @i = @i + 1;
  SET @symbols = SUBSTRING(symbols,@p,1);
  SET @p = @p + 2;
  SET cost = REPLACE(cost, @symbols,'');
  UNTIL @i > @total_symbols END REPEAT;
    RETURN cost;
    END