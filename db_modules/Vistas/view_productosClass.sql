CREATE OR REPLACE VIEW public.view_productosclass AS 
 SELECT "tbl_productosClass".code as codeclass,
    "tbl_productosClass".name as nameclass,
    "tbl_poductsType".code as codetipo,
    "tbl_poductsType".name as nametipo,
    tbl_productos."imgSrc" as images
   FROM "tbl_productosClass",
   "tbl_poductsType"
   left join tbl_productos on "tbl_poductsType".code = tbl_productos."typeCode"
   limit 1
