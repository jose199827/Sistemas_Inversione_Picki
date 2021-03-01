BEGIN
	CASE accion 
        WHEN 'nuevo' THEN
        START TRANSACTION;
          INSERT INTO `productos` (`id_proveedor`, `id_marca`, `id_categoria`,`id_grupo`, `id_tip_impuesto`,`id_uni_medida`, `nom_producto`,`des_producto`,`fot_producto`,`pre_compra`,`pre_venta`,`pre_reventa`,`sto_minimo`, `sto_maximo`, `fec_registro`, `usr_registro`) 
          VALUES (id_proveedor_, id_marca_,id_categoria_, id_grupo_,id_tip_impuesto_,id_uni_medida_,nom_producto_,des_producto_,fot_producto_,pre_compra_,pre_venta_,pre_reventa_,sto_minimo_,sto_maximo_,now(),usr_registro_);
           COMMIT;    
        WHEN 'editar' THEN
        	UPDATE `productos` SET
        		`id_proveedor`=id_proveedor_,
            `id_marca`=id_marca_,
            `id_categoria`=id_categoria_,
            `id_grupo`=id_grupo_,
            `id_tip_impuesto`=id_tip_impuesto_,
            `id_uni_medida`=id_uni_medida_,
            `nom_producto`=nom_producto_,
            `des_producto`=des_producto_,
            `fot_producto`=fot_producto_,
            `pre_compra`=pre_compra_,
            `pre_venta`=pre_venta_,
            `pre_reventa`=pre_reventa_,
            `sto_minimo`=sto_minimo_,
            `sto_maximo`=sto_maximo_,
            `fec_registro`= now(),
            `usr_registro`=usr_registro_
        		WHERE `id_producto`=id_producto_;

    END CASE;
 
END
UPDATE `productos` SET `des_producto` = 'haciendo una prueba' WHERE `productos`.`id_producto` = 2;


        WHEN 'eliminar' THEN
        	DELETE from proveedores WHERE id_proveedor=id_proveedor_;
        	WHEN 'consultar' THEN
    	SELECT * FROM `PROVEEDORES` WHERE id_proveedor= id_proveedor_;










BEGIN
	CASE accion_ 
        WHEN 'nuevo' THEN/*Caso de insertar*/
          START TRANSACTION;
          	/*Insert a la tabla de productos*/
            INSERT INTO `productos` (`id_proveedor`, 
                                     `id_marca`, 
                                     `id_categoria`, 
                                     `id_grupo`, 
                                     `id_tip_impuesto`, 
                                     `id_uni_medida`, 
                                     `nom_producto`, 
                                     `des_producto`, 
                                     `fot_producto`, 
                                     `pre_compra`, 
                                     `pre_venta`, 
                                     `pre_reventa`, 
                                     `sto_minimo`, 
                                     `sto_maximo`, 
                                     `fec_registro`, 
                                     `usr_registro`) 
                                     VALUES (id_proveedor_, 
                                             id_marca_, 
                                             id_categoria_, 
                                             id_grupo_, 
                                             id_tip_impuesto_, 
                                             id_uni_medida_, 
                                             nom_producto_, 
                                             des_producto_, 
                                             fot_producto_, 
                                             pre_compra_, 
                                             pre_venta_, 
                                             pre_reventa_, 
                                             sto_minimo_, 
                                             sto_maximo_, 
                                             now(), 
                                             usr_registro_);
          COMMIT;  
        WHEN  'editar' THEN/*Caso de insertar*/
            UPDATE proveedores SET
                `id_proveedor`=id_proveedor_,


	END CASE;
END
