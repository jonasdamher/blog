'use strict';

const configToolbarQuill = [
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    ['bold', 'italic', 'underline', 'strike'],
    [{ 'align': [] }],
    [{ 'list': 'ordered' },
    { 'list': 'bullet' }],
    [{ 'indent': '-1' },
    { 'indent': '+1' }],
    ['blockquote', 'code-block'],
    [{ 'color': [] },
    { 'background': [] }],
    ['clean']
];

const quill = new Quill('#editor', {
    modules: {
        toolbar: configToolbarQuill
    },
    theme: 'snow'
});

const request = new Request('/publication');

request.post().send('/store')
    .then((res) => {
    }).catch((err) => {
    })