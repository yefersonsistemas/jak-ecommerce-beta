CREATE OR REPLACE VIEW public.view_countnewarrival AS 
 SELECT count(id) as quantity
   FROM tbl_productos
   where "insertDate" BETWEEN now()::date and now()::date - integer '7'