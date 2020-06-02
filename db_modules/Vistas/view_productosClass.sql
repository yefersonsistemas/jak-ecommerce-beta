CREATE OR REPLACE VIEW public.view_productosclass AS 
 SELECT
    "tbl_poductsType".code as codetipo,
    "tbl_poductsType".name as nametipo
   FROM "tbl_productosClass"
     inner JOIN "tbl_poductsType" ON "tbl_productosClass".code = "tbl_poductsType"."classCode"
