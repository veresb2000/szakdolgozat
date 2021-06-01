using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Szalloda.Model
{
    class Foglalas
    {
        private int id;
        private int szobaID;
        private int vendegID;
        private string elsoNap;
        private string utolsoNap;
        private string foglalasDatum;

        public Foglalas(int id, int szobaID, int vendegID, string elsoNap, string utolsoNap, string foglalasDatum)
        {
            this.id = id;
            this.szobaID = szobaID;
            this.vendegID = vendegID;
            this.elsoNap = elsoNap;
            this.utolsoNap = utolsoNap;
            this.foglalasDatum = foglalasDatum;
        }

        public int getID()
        {
            return this.id;
        }

        public void setSzobaID(int szobaID)
        {
            this.szobaID = szobaID;
        }

        public int getSzobaID()
        {
            return this.szobaID;
        }

        public void setVendegID(int vendegID)
        {
            this.vendegID = vendegID;
        }
        
        public int getVendegID()
        {
            return this.vendegID;
        }

        public void setElsoNap(string elsoNap)
        {
            this.elsoNap = elsoNap;
        }

        public string getElsoNap()
        {
            return this.elsoNap;
        }

        public void setUtolsoNap(string utolsoNap)
        {
            this.utolsoNap = utolsoNap;
        }

        public string getUtolsoNap()
        {
            return this.utolsoNap;
        }

        public void setFoglalasDatum(string foglalasDatum)
        {
            this.foglalasDatum = foglalasDatum;
        }

        public string getFoglalasDatum()
        {
            return this.foglalasDatum;
        }


    }
}
