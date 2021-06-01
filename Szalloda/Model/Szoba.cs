using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Szalloda.Model
{
    class Szoba
    {
        private int id;
        private string ellatasTipusa;
        private string szobaTipus;
        private int ferohely;
        private int ar;

        public Szoba(int id, string ellatasTipusa, string szobaTipus, int ferohely, int ar)
        {
            this.id = id;
            this.ellatasTipusa = ellatasTipusa;
            this.szobaTipus = szobaTipus;
            this.ferohely = ferohely;
            this.ar = ar;
        }

        public int getID()
        {
            return this.id;
        }

        public string getEllatasTipusa() 
        {
            return this.ellatasTipusa;
        }

        public void setEllatasTipusa(string ellatasTipusa)
        {
            this.ellatasTipusa = ellatasTipusa;
        }

        public string getSzobaTipus()
        {
            return this.szobaTipus;
        }

        public void setSzobaTipus(string szobaTipus)
        {
            this.szobaTipus = szobaTipus;
        }

        public int getFerohely()
        {
            return this.ferohely;
        }

        public void setFerohely(int ferohely)
        {
            this.ferohely = ferohely;
        }

        public int getAr()
        {
            return this.ar;
        }

        public void setAr(int ar)
        {
            this.ar = ar;
        }        

    }
}
