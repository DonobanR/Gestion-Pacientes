# Sistema de Gestión de Pacientes con Geolocalización

Este proyecto es una aplicación web desarrollada **sin frameworks** (solo con **PHP, JavaScript, HTML y CSS puros**) que permite gestionar pacientes y doctores, con funcionalidades de inicio de sesión diferenciadas y visualización de ubicación mediante coordenadas enviadas desde un **Arduino**.

## Objetivo del Proyecto

Explorar el desarrollo de una aplicación médica básica **sin frameworks ni librerías externas**, con el fin de evaluar la **dificultad, mantenibilidad y nivel de vulnerabilidad** que conlleva hacerlo de esta forma.

---

## Funcionalidades Principales

### Doble Login
- **Doctor**:
  - Visualiza lista de pacientes asociados.
  - Accede a la ubicación en tiempo real de cada paciente.
- **Paciente**:
  - Accede a su perfil.
  - Visualiza su historial médico básico.

### Geolocalización en Tiempo Real
- Un **Arduino** con módulo GPS envía las **coordenadas** (latitud y longitud) a través de una **API REST propia** desarrollada en PHP.
- Las coordenadas se procesan y se **envían a la API de Google Maps**, mostrando la ubicación de cada paciente en un mapa.

---

## 🔧 Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript (sin librerías).
- **Backend**: PHP (puro).
- **Base de datos**: MySQL.
- **Dispositivo IoT**: Arduino con módulo GPS.
- **APIs**:
  - 📡 **REST API** (propia) para recibir y enviar coordenadas.
  - 🗺️ **Google Maps API** para mostrar la ubicación en el navegador.

---

## ⚠️ Consideraciones de Seguridad y Limitaciones

> Este proyecto fue creado intencionalmente sin frameworks para analizar sus **riesgos y complejidades**.

### Vulnerabilidades detectadas:
- 💥 **Falta de hashing de contraseñas** (almacenadas en texto plano).
- 🧨 **SQL Injection** (consultas sin sanitización).
- 🔓 **Sesiones no protegidas** adecuadamente.
- 🐞 **Sin validación robusta del lado del cliente y servidor**.
- 🌍 **Exposición directa de APIs sin autenticación**.
- 🛰️ **Sin cifrado en la transmisión de datos GPS**.

> **No se recomienda usar este enfoque en producción.** Este proyecto es solo con fines educativos y de análisis de buenas/malas prácticas.

---

## 🧠 Aprendizajes

- Programar sin frameworks **alarga los tiempos de desarrollo**.
- Es muy fácil **olvidar prácticas seguras**, como validación y sanitización.
- Manejar el estado (login, sesiones) de forma segura es **complejo sin ayuda de frameworks**.
- Este proyecto sirve como base para luego migrar a un stack más robusto (Laravel, Vue, etc.).

---

## 🧑‍💻 Autor

- Donoban R.
