CREATE OR REPLACE VIEW public.view_banners AS 
 SELECT tbl_banners."imgSrc",
    tbl_banners.id
   FROM tbl_banners