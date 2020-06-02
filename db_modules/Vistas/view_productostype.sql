CREATE OR REPLACE VIEW public.view_productostype AS 
 SELECT "tbl_poductsType".code AS codetipo,
    "tbl_poductsType".name AS nametipo,
    tbl_productos."imgSrc"
   FROM "tbl_poductsType"
     JOIN tbl_productos ON tbl_productos."typeCode"::text = "tbl_poductsType".code::text;