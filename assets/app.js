import './bootstrap.js';
import './styles/app.css';

$(document).ready(function() {

    $('#sortable-s-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-a-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-b-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-c-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-d-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-e-tier').sortable({
        group: 'sortimages'
    });

    $('#sortable-images').sortable({
        group: 'sortimages'
    });
})
