CREATE OR REPLACE VIEW public.view_productosclass AS 
 SELECT
 "tbl_productosClass".code,
 "tbl_productosClass".name as monbreclass
   FROM "tbl_productosClass"
