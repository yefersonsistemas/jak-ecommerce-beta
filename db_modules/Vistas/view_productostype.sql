CREATE OR REPLACE VIEW public.view_productostype AS 
 SELECT "tbl_poductsType".code AS codetipo,
    "tbl_poductsType".name AS nametipo
   FROM "tbl_poductsType"
