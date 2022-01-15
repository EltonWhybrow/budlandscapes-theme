module.exports = {

  purge: false,
  theme: {
    zIndex: {
      '25': 25,
      '50': 50,
      '75': 75,
      '100': 100,
      'auto': 'auto',
    },
    container: {
      padding: {
        default: '0',
        sm: '.5rem',
        lg: '4rem',
        xl: '5rem',
      },
    }

    ,
    fontFamily: {
      sans: ['"Open Sans"', 'Helvetica', 'Arial', 'sans-serif'],
      azo: ['"azo-sans-web"', 'Open Sans', 'Arial', 'sans-serif'],
      // serif: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
      // mono: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
    },
    extend: {
      height: {
        // igb: '28rem'
      },
      colors: {
        'bl-rich-blue': {
          '50': '#f4f4f7',
          '100': '#e8e9ef',
          '200': '#c6c8d7',
          '300': '#a3a7be',
          '400': '#5f648e',
          '500': '#1a225d',
          '600': '#171f54',
          '700': '#141a46',
          '800': '#101438',
          '900': '#0d112e'
        },
        'bl-li-grey': {
          '50': '#fcfcfc',
          '100': '#f9f9f9',
          '200': '#f1f1f1',
          '300': '#e9e9e9',
          '400': '#d8d8d8',
          '500': '#c7c7c7',
          '600': '#b3b3b3',
          '700': '#959595',
          '800': '#777777',
          '900': '#626262'
        },
        'bl-md-grey': {
          '50': '#f9f9f9',
          '100': '#f3f3f3',
          '200': '#e2e2e2',
          '300': '#d1d1d1',
          '400': '#aeaeae',
          '500': '#8b8b8b',
          '600': '#7d7d7d',
          '700': '#686868',
          '800': '#535353',
          '900': '#444444'
        },
        'bl-dk-grey': {
          '50': '#f5f5f5',
          '100': '#ebebeb',
          '200': '#cecece',
          '300': '#b0b0b0',
          '400': '#747474',
          '500': '#393939',
          '600': '#333333',
          '700': '#2b2b2b',
          '800': '#222222',
          '900': '#1c1c1c'
        },
        'bl-orange': {
          '50': '#fef8f4',
          '100': '#fdf1e9',
          '200': '#fbddc9',
          '300': '#f8c8a8',
          '400': '#f29f67',
          '500': '#ed7626',
          '600': '#d56a22',
          '700': '#b2591d',
          '800': '#8e4717',
          '900': '#743a13'
        },
        'info': {
          DEFAULT: '#BDE5F8',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#EBF7FD',
          '500': '#BDE5F8',
          '600': '#8FD3F3',
          '700': '#61C1EE',
          '800': '#33AFE9',
          '900': '#1696D3'
        },
        'success': {
          DEFAULT: '#DFF2BF',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#F4FBE9',
          '500': '#DFF2BF',
          '600': '#CAE995',
          '700': '#B5E16A',
          '800': '#9FD840',
          '900': '#86BE27'
        },
        'warning': {
          DEFAULT: '#FEEFB3',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#FFFAE5',
          '500': '#FEEFB3',
          '600': '#FDE481',
          '700': '#FDDA4E',
          '800': '#FCCF1C',
          '900': '#E2B503'
        },
        'alert': {
          DEFAULT: '#FF7070',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFD6D6',
          '400': '#FFA3A3',
          '500': '#FF7070',
          '600': '#FF3D3D',
          '700': '#FF0A0A',
          '800': '#D60000',
          '900': '#A30000'
        },
        link: {
          'default': '#3182ce',
          'hover': '#63b3ed',
        }
      },
      fontSize: {
        xxs: '0.675rem',
      }

      ,
      // spacing: {
      //   '1/2': '50%',
      //   '1/3': '33.333333%',
      //   '2/3': '66.666667%',
      //   '1/4': '25%',
      //   '2/4': '50%',
      //   '3/4': '75%',
      //   '1/5': '20%',
      //   '2/5': '40%',
      //   '3/5': '60%',
      //   '4/5': '80%',
      //   '1/6': '16.666667%',
      //   '2/6': '33.333333%',
      //   '3/6': '50%',
      //   '4/6': '66.666667%',
      //   '5/6': '83.333333%',
      //   '1/12': '8.333333%',
      //   '2/12': '16.666667%',
      //   '3/12': '25%',
      //   '4/12': '33.333333%',
      //   '5/12': '41.666667%',
      //   '6/12': '50%',
      //   '7/12': '58.333333%',
      //   '8/12': '66.666667%',
      //   '9/12': '75%',
      //   '10/12': '83.333333%',
      //   '11/12': '91.666667%',
      //   full: '100%',
      //   screen: '100vw',
      // },
      lineHeight: {
        tighter: '1.125',
      }

      ,
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        full: '100%',
      }

      ,
      backgroundImage: {
        // 'home-hero-sm': "url('https://staging.ingenie.com/resources/images/maskhead/isometric-road-home-mob.svg')",
      }

      ,
    }
  }

  ,
  variants: {
    extend: {
      textColor: ['responsive', 'hover', 'focus', 'visited', 'group-hover'],
      backgroundColor: ['group-hover'],
      margin: ['first'], // TODO: might not work
      borderWidth: ['hover'], // not using yet
    }
  }

  ,
  future: {
    removeDeprecatedGapUtilities: true,
  }

  ,
  plugins: [({
    addUtilities
  }

  ) => {
    const utils = {
      '.translate-x-half': {
        transform: 'translateX(50%)',
      }

      ,
    }

      ;
    addUtilities(utils, ['responsive'])
  }

  ]
}

  ;