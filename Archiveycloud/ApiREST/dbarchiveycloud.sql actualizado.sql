/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dbarchiveycloud

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-10-17 15:45:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `asiste`
-- ----------------------------
DROP TABLE IF EXISTS `asiste`;
CREATE TABLE `asiste` (
  `cod_hospital` int(11) NOT NULL,
  `iu_hc` int(11) NOT NULL,
  `cod_servicio` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_hospital`),
  KEY `iu_hc` (`iu_hc`),
  CONSTRAINT `iu_hc` FOREIGN KEY (`iu_hc`) REFERENCES `pacientes` (`iu_cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nit` FOREIGN KEY (`cod_hospital`) REFERENCES `hospital` (`nit`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of asiste
-- ----------------------------

-- ----------------------------
-- Table structure for `barrios`
-- ----------------------------
DROP TABLE IF EXISTS `barrios`;
CREATE TABLE `barrios` (
  `id_barrio` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_barrio`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of barrios
-- ----------------------------
INSERT INTO `barrios` VALUES ('0', '7 de julio');
INSERT INTO `barrios` VALUES ('1', 'Pizamos 2');
INSERT INTO `barrios` VALUES ('2', 'retiro');

-- ----------------------------
-- Table structure for `ciudades`
-- ----------------------------
DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=345624 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of ciudades
-- ----------------------------
INSERT INTO `ciudades` VALUES ('1324', 'CALI', null);
INSERT INTO `ciudades` VALUES ('23456', 'BOGOTA', null);
INSERT INTO `ciudades` VALUES ('345623', 'TULUA', null);

-- ----------------------------
-- Table structure for `hospital`
-- ----------------------------
DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `nit` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` tinytext DEFAULT NULL,
  `cod_servicio` int(11) DEFAULT NULL,
  `iu_paciente` int(11) DEFAULT NULL,
  PRIMARY KEY (`nit`),
  KEY `cod_servicio` (`cod_servicio`),
  CONSTRAINT `cod_servicio` FOREIGN KEY (`cod_servicio`) REFERENCES `tiene` (`cod_hospital`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of hospital
-- ----------------------------

-- ----------------------------
-- Table structure for `medicamentos`
-- ----------------------------
DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE `medicamentos` (
  `id_medicamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id_medicamento`)
) ENGINE=InnoDB AUTO_INCREMENT=235690 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of medicamentos
-- ----------------------------
INSERT INTO `medicamentos` VALUES ('234', 'acetaminofen  x 500 mg', 'tableta');
INSERT INTO `medicamentos` VALUES ('235689', 'Hioscina Simple x 20 mg ', null);

-- ----------------------------
-- Table structure for `pacientes`
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `iu_cedula` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT '',
  `apellidos` varchar(33) DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(11) DEFAULT '',
  `telefono` varchar(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cod_servicio` int(11) DEFAULT NULL,
  `barrio` varchar(11) DEFAULT NULL,
  `ciudad` varchar(11) DEFAULT '',
  `tp_paciente` varchar(11) DEFAULT '',
  `seguridad_social` varchar(11) DEFAULT '',
  PRIMARY KEY (`iu_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of pacientes
-- ----------------------------
INSERT INTO `pacientes` VALUES ('1006156156', 'juan desli', 'duran giron', '1999-06-15', '25', 'masculino', '312653463', 'cr43 d #43 h -4', '342', 'caldas', 'cali', 'hospitaliza', 'emssanar');

-- ----------------------------
-- Table structure for `servicio`
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `cod_servicio` int(11) NOT NULL,
  `nombre` varchar(35) DEFAULT NULL,
  `iu_paciente` int(11) DEFAULT NULL,
  `nit_hospital` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of servicio
-- ----------------------------

-- ----------------------------
-- Table structure for `tiene`
-- ----------------------------
DROP TABLE IF EXISTS `tiene`;
CREATE TABLE `tiene` (
  `cod_hospital` int(11) NOT NULL,
  `cod_servisio` int(11) NOT NULL,
  `iu_hc` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_hospital`,`cod_servisio`),
  KEY `cod_servisio` (`cod_servisio`),
  CONSTRAINT `cod_servisio` FOREIGN KEY (`cod_servisio`) REFERENCES `servicio` (`cod_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of tiene
-- ----------------------------

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario` varchar(18) NOT NULL,
  `clave` varchar(18) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuario`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('admin', '1234', '1', '1');
INSERT INTO `usuarios` VALUES ('daniel', '123456', '2', '1');
INSERT INTO `usuarios` VALUES ('stiven', '2000', '2', '1');
