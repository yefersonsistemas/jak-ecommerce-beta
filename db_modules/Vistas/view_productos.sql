
-- DROP VIEW public.view_productos;

CREATE OR REPLACE VIEW public.view_productos AS
SELECT tbl_productos.name,
  tbl_productos.code,
  tbl_productos."imgSrc" as images,
  tbl_productos.descripcion as description,
  tbl_productos."shortDescripcion" as shortDescription,
  tbl_productos.materials,
  tbl_productos."actualPrice" as price
FROM tbl_productos
ORDER BY tbl_productos.id DESC;

ALTER TABLE public.view_productos
  OWNER TO postgres;