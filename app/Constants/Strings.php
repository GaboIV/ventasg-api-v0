<?php

namespace App\Constants;

class Strings
{
    const INVALID_CREDENTIALS = 'Credenciales incorrectas';
    const SUCCESS_LOGIN = 'Inicio de sesión satisfactorio';
    const MAX_ATTEMPTS = 'Se ha excedido el límite máximo de intentos, contacte a su administrador para su activación';
    const EMAIL_NOT_FOUND = 'El usuario no se encuentra registrado';
    const PASSWORD_MAIL_SENT = 'En unos momentos te llegará al correo personal';
    const SUCCESS = "Satisfactorio";
    const OBSOLETE_ACCESS_TOKEN = "Token de acceso expirado";
    const USER_NOT_FOUND = "Usuario no encontrado";
    const INVALID_CURRENT_PASSWORD = "Contraseña actual incorrecta";
    const INVALID_CURRENT_CODE = "Código inválido";
    const SUCCESS_CHANGE_PASSWORD = "Contraseña cambiada correctamente";
    const IMPORT_IN_PROGRESS = "Importación en proceso";
    const ACCESS_DENIED = "Acceso denegado";
    const ACCESS_DENIED_ACTIVATION_REQUIRED = "El usuario se encuentra inactivo, comuníquese con el administrador";

    const NEW_CATEGORY_CREATED = "Categoría creada correctamente";
    const CATEGORY_UPDATED = "Categoría actualizada correctamente";
    const CATEGORY_DELETED = "Categoría eliminada correctamente";

    const CLIENT_DELETED = "Cliente eliminado correctamente";

    // notifications
    const NOTIFICATION_ACTION_CREATE = "create";
    const NOTIFICATION_ACTION_UPDATE = "update";

    const NOTIFICATION_CATEGORY_SECTION = "categories";
    const NOTIFICATION_NEW_CATEGORY = "Nueva categoría";
    const NOTIFICATION_UPDATED_CATEGORY = "Categoría actualizada";
    const NOTIFICATION_CATEGORY_PATH = "category";

    // Import excels
    const SUCCESS_IMPORT_USERS = "La importación de clientes se ha realizado correctamente";
    const FAILED_IMPORT_USERS = "Fallo en importación de clientes, inténtelo más tarde";
    const EMAIL_IN_USE = "Correo eletrónico en uso";
}
