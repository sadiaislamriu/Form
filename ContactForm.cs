using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Opcodespace
{
    #region ContactForm
    public class ContactForm
    {
        #region Member Variables
        protected string _fname;
        protected string _lname;
        protected string _email;
        protected unknown _cnumber;
        protected string _country;
        protected string _address;
        protected string _gender;
        protected string _about;
        #endregion
        #region Constructors
        public ContactForm() { }
        public ContactForm(string fname, string lname, unknown cnumber, string country, string address, string gender, string about)
        {
            this._fname=fname;
            this._lname=lname;
            this._cnumber=cnumber;
            this._country=country;
            this._address=address;
            this._gender=gender;
            this._about=about;
        }
        #endregion
        #region Public Properties
        public virtual string Fname
        {
            get {return _fname;}
            set {_fname=value;}
        }
        public virtual string Lname
        {
            get {return _lname;}
            set {_lname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual unknown Cnumber
        {
            get {return _cnumber;}
            set {_cnumber=value;}
        }
        public virtual string Country
        {
            get {return _country;}
            set {_country=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual string About
        {
            get {return _about;}
            set {_about=value;}
        }
        #endregion
    }
    #endregion
}