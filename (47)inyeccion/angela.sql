/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100135
 Source Host           : localhost:3306
 Source Schema         : angela

 Target Server Type    : MySQL
 Target Server Version : 100135
 File Encoding         : 65001

 Date: 13/05/2019 13:54:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for produc
-- ----------------------------
DROP TABLE IF EXISTS `produc`;
CREATE TABLE `produc`  (
  `c_art` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `seccion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `n_art` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `precio` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `importado` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `p_orig` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of produc
-- ----------------------------
INSERT INTO `produc` VALUES ('AR01', 'FERRETERIA', 'DESTORNILLADOR', '6.63', '22/10/2018', 'FALSO', 'ESPAnA');
INSERT INTO `produc` VALUES ('AR02C', 'CONFECCION', 'TRAJE CABALLERO', '284.58', '11/03/2018', 'VERDA', 'ITALIA');
INSERT INTO `produc` VALUES ('AR03', 'JUGETERIA', 'COCHE TELEDIRIGIDO', '159.45', '26/05/2018', 'VERDA', 'MARRUECOS');
INSERT INTO `produc` VALUES ('AR04', 'DEPORTES', 'RAQUETA TENIS', '93.45', '20/03/2018', 'VERDA', 'USA');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `contra` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `tfno` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('maria', '5432', '753421869', 'gran via');
INSERT INTO `usuarios` VALUES ('ana', '5555', '951263847', 'serrano');

SET FOREIGN_KEY_CHECKS = 1;
