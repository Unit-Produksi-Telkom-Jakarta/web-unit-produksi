import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// Reference from published scripts
require("./vendor/livewire-ui/modal");

// Reference from vendor
require("../../vendor/livewire-ui/modal/resources/js/modal");
