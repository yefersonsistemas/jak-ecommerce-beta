CREATE OR REPLACE VIEW public.view_inventory AS 
 SELECT 
    tbl_inventory.cantidad,
    "tbl_poductsType".name as nombretipo,
    "tbl_productosClass".name as nombreclass,
    tbl_productos.name as nombreproducto
   FROM tbl_inventory
     left join tbl_productos on tbl_inventory."codeProducto" = tbl_productos.code
     left join "tbl_poductsType" on tbl_inventory."typeCode" = "tbl_poductsType".code
     left join "tbl_productosClass" on tbl_inventory."classCode" = "tbl_productosClass".code
