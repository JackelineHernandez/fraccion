-- MySQL Workbench Synchronization
-- Generated: 2018-12-06 21:28
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: DELL

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `dbFraccion`.`productos` 
ADD CONSTRAINT `fk_tblProducto_tblCaracteristicasFinancieras`
  FOREIGN KEY (`caracteristicas_financieras_id`)
  REFERENCES `dbFraccion`.`caracteristicas_financieras` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblProducto_tblEstado1`
  FOREIGN KEY (`estados_id`)
  REFERENCES `dbFraccion`.`estados` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblProducto_tblAliado1`
  FOREIGN KEY (`aliados_id`)
  REFERENCES `dbFraccion`.`aliados` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblProducto_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`ciudades` 
ADD CONSTRAINT `fk_tblCiudad_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`estados` 
ADD CONSTRAINT `fk_tblEstado_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`tipos_productos` 
ADD CONSTRAINT `fk_tblTipoProducto_tblProducto1`
  FOREIGN KEY (`productos_id`)
  REFERENCES `dbFraccion`.`productos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblTipoProducto_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`caracteristicas_tecnicas` 
ADD CONSTRAINT `fk_tblCaracteristicasTecnicas_tblProducto1`
  FOREIGN KEY (`productos_id`)
  REFERENCES `dbFraccion`.`productos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblCaracteristicaTecnica_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`caracteristicas_financieras` 
ADD CONSTRAINT `fk_tblCaracteristicaFinanciera_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`aliados` 
ADD CONSTRAINT `fk_tblAliado_tblCiudad1`
  FOREIGN KEY (`ciudades_id`)
  REFERENCES `dbFraccion`.`ciudades` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblAliado_tblTipoIdentificacion1`
  FOREIGN KEY (`tipos_identificaciones_id`)
  REFERENCES `dbFraccion`.`tipos_identificaciones` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblAliado_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`tipos_identificaciones` 
ADD CONSTRAINT `fk_tblTipoIdentificacion_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`contenidos` 
ADD CONSTRAINT `fk_tblImagen_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_contenidos_tipo_contenidos1`
  FOREIGN KEY (`tipo_contenidos_id`)
  REFERENCES `dbFraccion`.`tipo_contenidos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`aliados_contenidos` 
ADD CONSTRAINT `fk_tblImagen_Aliado_tblImagen1`
  FOREIGN KEY (`contenidos_id`)
  REFERENCES `dbFraccion`.`contenidos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblImagen_Aliado_tblAliado1`
  FOREIGN KEY (`aliados_id`)
  REFERENCES `dbFraccion`.`aliados` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`contenido_producto` 
ADD CONSTRAINT `fk_tblProducto_Imagen_tblImagen1`
  FOREIGN KEY (`contenido_id`)
  REFERENCES `dbFraccion`.`contenidos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblProducto_Imagen_tblProducto1`
  FOREIGN KEY (`producto_id`)
  REFERENCES `dbFraccion`.`productos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`caracteristicas_contenidos` 
ADD CONSTRAINT `fk_tblCaracteristica_Imagen_tblCaracteristicaTecnica1`
  FOREIGN KEY (`caracteristicas_tecnicas_id`)
  REFERENCES `dbFraccion`.`caracteristicas_tecnicas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblCaracteristica_Imagen_tblImagen1`
  FOREIGN KEY (`contenidos_id`)
  REFERENCES `dbFraccion`.`contenidos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`roles` 
ADD CONSTRAINT `fk_tblRol_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`usuarios` 
ADD CONSTRAINT `fk_tblUsuario_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`personas` 
ADD CONSTRAINT `fk_tblPersona_tblTipoIdentificacion1`
  FOREIGN KEY (`tipos_identificaciones_id`)
  REFERENCES `dbFraccion`.`tipos_identificaciones` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_tblCiudad1`
  FOREIGN KEY (`ciudades_id`)
  REFERENCES `dbFraccion`.`ciudades` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_tblPersona1`
  FOREIGN KEY (`personas_referido_id`)
  REFERENCES `dbFraccion`.`personas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_tblGenero1`
  FOREIGN KEY (`generos_id`)
  REFERENCES `dbFraccion`.`generos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_tipos_personas1`
  FOREIGN KEY (`tipos_personas_id`)
  REFERENCES `dbFraccion`.`tipos_personas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`tipos_personas` 
ADD CONSTRAINT `fk_tblTipoPersona_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`personas_productos` 
ADD CONSTRAINT `fk_tblPersona_Producto_tblPersona1`
  FOREIGN KEY (`personas_id`)
  REFERENCES `dbFraccion`.`personas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_Producto_tblProducto1`
  FOREIGN KEY (`productos_id`)
  REFERENCES `dbFraccion`.`productos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblPersona_Producto_tblEstado_Inversion1`
  FOREIGN KEY (`estados_inversiones_id`)
  REFERENCES `dbFraccion`.`estados_inversiones` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`tipo_contenidos` 
ADD CONSTRAINT `fk_tipo_contenidos_usuarios1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`generos` 
ADD CONSTRAINT `fk_tblGenero_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`estados_civiles` 
ADD CONSTRAINT `fk_tblEstadoCivil_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`estados_inversiones` 
ADD CONSTRAINT `fk_tblEstado_Inversion_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`estados_cuentas` 
ADD CONSTRAINT `fk_tblEstadoCuenta_tblPersona_Producto1`
  FOREIGN KEY (`personas_productos_id`)
  REFERENCES `dbFraccion`.`personas_productos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblEstadoCuenta_tblRubro1`
  FOREIGN KEY (`rubros_id`)
  REFERENCES `dbFraccion`.`rubros` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblEstadoCuenta_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estados_cuentas_medios_pagos1`
  FOREIGN KEY (`medios_pagos_id`)
  REFERENCES `dbFraccion`.`medios_pagos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`medios_pagos` 
ADD CONSTRAINT `fk_tblMedioPago_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`rubros` 
ADD CONSTRAINT `fk_tblRubro_tblUsuario1`
  FOREIGN KEY (`usuarios_id`)
  REFERENCES `dbFraccion`.`usuarios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`campos` 
ADD CONSTRAINT `fk_campos_tipos_campos1`
  FOREIGN KEY (`tipos_campos_id`)
  REFERENCES `dbFraccion`.`tipos_campos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`formularios_campos` 
ADD CONSTRAINT `fk_formularios_campos_formularios1`
  FOREIGN KEY (`formularios_id`)
  REFERENCES `dbFraccion`.`formularios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_formularios_campos_campos1`
  FOREIGN KEY (`campos_id`)
  REFERENCES `dbFraccion`.`campos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`personas_formularios` 
ADD CONSTRAINT `fk_personas_formularios_personas1`
  FOREIGN KEY (`personas_id`)
  REFERENCES `dbFraccion`.`personas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_formularios_formularios1`
  FOREIGN KEY (`formularios_id`)
  REFERENCES `dbFraccion`.`formularios` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`respuestas_formularios` 
ADD CONSTRAINT `fk_respuestas_formularios_formularios_campos1`
  FOREIGN KEY (`formularios_campos_id`)
  REFERENCES `dbFraccion`.`formularios_campos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `dbFraccion`.`campos_opciones` 
ADD CONSTRAINT `fk_campos_opciones_campos1`
  FOREIGN KEY (`campos_id`)
  REFERENCES `dbFraccion`.`campos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_campos_opciones_opciones1`
  FOREIGN KEY (`opciones_id`)
  REFERENCES `dbFraccion`.`opciones` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
