import content from "."
const imgPath = `/assets/project`

const projectContent = [
    {
        title: 'Orange Business Development Ltd.(orangebd)',
        desc: 'Last two years i have been working with Bangladesh National Portal(CMS) project and different kind of services of this project.',
        projects: [
            {
                img_thumb: imgPath + '/1.png',
                title: 'Bangladesh National',
                short_desc: "Bangladesh National Portal is a national portal of the People's Republic of Bangladesh under Access to Information programme ran from the Prime Minister's Office of Bangladesh.",
                long_desc: '',
                tools_tech: ['PHP', 'LARAVEL', 'TWIG', 'MYSQL', 'JAVASCRIPT', 'LUMEN','PHALCON'],
                private: true
            },
            {
                img_thumb: imgPath + '/2.png',
                title: 'Bangladesh Polling System',
                short_desc: 'Bangladesh polling system take user feedback from Bangladesh national portal user, as well as people can participate the polling.People can also comments and suggestions particular portal to get the soluations.',
                long_desc: '',
                tools_tech: ['NUXTJS', 'LARAVEL', 'MYSQL','HTML','CSS'],
                private: true
            },
            {
                img_thumb: imgPath + '/3.png',
                title: 'Database Migration Script',
                short_desc: 'The following project helped to migrate the old database structure to the new database structure.',
                long_desc: '',
                tools_tech: ['PHP', 'LARAVEL', 'MYSQL'],
                private: true
            }
        ]
    },
]

export default projectContent