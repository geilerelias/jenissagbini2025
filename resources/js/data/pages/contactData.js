/**
 * Datos de contacto - Single Responsibility
 */
export const CONTACT_INFO = {
    email: "contacto@jenissagbini.com",
    address: "Av. Simón Bolívar No. 6-04",
    city: "Valledupar, Colombia",
    mapUrl: "https://www.google.com/maps?q=Av.%20Sim%C3%B3n%20Bol%C3%ADvar%206-04%20Valledupar%20Colombia&output=embed",
    mapLink: "https://maps.google.com/?q=Av.+Simón+Bolívar+No.+6-04+Valledupar,+Co",
    schedule: "Lun a Vie: 8:00 AM - 5:00 PM",
};

export const CONTACT_CARDS = [
    {
        icon: "mdi-email-outline",
        title: "Escríbeme",
        description: "Comparte tu proyecto o idea. Te responderé lo antes posible.",
        value: "contacto@jenissagbini.com",
        href: "mailto:contacto@jenissagbini.com",
    },
    {
        icon: "mdi-map-marker-outline",
        title: "Ubicación",
        description: "Av. Simón Bolívar No. 6-04, Valledupar, Colombia",
        value: "Ver en el mapa",
        href: "#map_marker",
    },
    {
        icon: "mdi-lightbulb-outline",
        title: "¿Tienes una idea?",
        description: "Hablemos sobre liderazgo, innovación y desarrollo personal.",
        value: "Enviar mensaje",
        href: "#contact_form",
    },
];
