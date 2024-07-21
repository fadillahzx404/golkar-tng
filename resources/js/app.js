import "flowbite";
import "./bootstrap";

import axios from "axios";
axios
    .get("/api/kecamatan")
    .then(function (response) {
        // handle success
        console.log(response);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
    .finally(function () {});
